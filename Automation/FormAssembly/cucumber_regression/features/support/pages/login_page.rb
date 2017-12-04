class LoginPage
	include PageObject
	include PageObject::PageFactory

	page_url("https://app.formassembly.com/users/forgot_password")

	text_field(:username, :id => "username")
	button(:email_reset_instructions, :css => "input.primaryAction.longButtonLabel")

	def enter_username

	end

	def select_email_reset_instructions_button
		
	end


end