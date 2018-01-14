Feature Login page

Scenario: Forgot Password
	When user selects the Forgot Your Password? link
	And enters valid username
	And selects Email Reset Instructions
	Then success message appears
