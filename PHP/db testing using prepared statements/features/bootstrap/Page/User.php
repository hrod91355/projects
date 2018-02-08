<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 2/5/18
 * Time: 10:15 PM
 */
include '../../../vendor/fzaninotto/faker/src/autoload.php';

//Global elements for validation
$createdUserFirstName = '';
$changedPassword = '';

class User extends Dbh
{

    public function createNewUser()
    {
        $faker = Faker\Factory::create();
        $first_name = $faker->firstName;
        $last_name = $faker->lastName;
        $city = $faker->city;
        $age = $faker->numberBetween($min = 18, $max = 100);
        $user_email = $faker->email;
        $user_pwd = $faker->password;

        $GLOBALS[createdUserFirstName] = $first_name;
        $stmt = $this->connect()->prepare("INSERT INTO users(first_name, last_name, city, age, user_email, user_pwd)
                 VALUES (?,?,?,?,?,?)");
        $stmt->execute([$first_name, $last_name, $city, $age, $user_email, $user_pwd]);
    }

    public function validateUserIsShowingInDB()
    {
        $first_name = $GLOBALS[createdUserFirstName];
        $stmt = $this->connect()->prepare("SELECT age FROM users WHERE first_name = ?");
        $stmt->execute([$first_name]);
        if ($stmt->rowCount()) {
            while ($row = $stmt->fetch()) {
                echo "New user with first name of " . $first_name . " has been created.";
            }
        } else {
            throw new Exception("New user with first name of " . $first_name . " is not in the DB");
        }
    }

    /**
     *
     */
    public function updateUserInformation()
    {
        $first_name = $GLOBALS[createdUserFirstName];
        $user_pwd = "pwdHasBeenChanged";
        $GLOBALS[changedPassword] = $user_pwd;

        $updateUser = $this->connect()->prepare("UPDATE users SET user_pwd=? WHERE first_name = ?");
        $updateUser->execute([$user_pwd, $first_name]);

    }

    public function validateUserPasswordChange()

    {
        $first_name = $GLOBALS[createdUserFirstName];
        $newPassword = $GLOBALS[changedPassword];
        try {
            $stmt = $this->connect()->prepare("SELECT user_pwd FROM users WHERE first_name = ?");
            $stmt->execute([$first_name]);
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);

            if (strpos($rows[user_pwd], $newPassword) !== false) {
                echo "Password has been changed to " . $newPassword . ".";

            } else {
                throw new Exception("Password has not been changed.");
            }

        } catch (PDOException $e) {
            echo $e->getMessage();

        }
    }

    public function deleteUserFromDB()
    {
        $first_name = $GLOBALS[createdUserFirstName];

        //Delete new user from DB

        try {
            $stmt = $this->connect()->prepare("DELETE FROM users WHERE first_name=?");
            $stmt->execute([$first_name]);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function validateUserHasBeenDeleted()
    {
        $first_name = $GLOBALS[createdUserFirstName];

        try {
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE first_name=?");
            $stmt->execute([$first_name]);
            $row_count = $stmt->rowCount();

            if ($row_count == 0) {
                echo "User has been deleted.";
            } else {
                throw new Exception("User with first name " . $first_name . " has not been deleted.");
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}