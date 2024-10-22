const form = document.getElementById('form')
const username_input = document.getElementById('UN2')
const password_input = document.getElementById('PW2')
const error_message = document.getElementById('error-message')

form.addEventListener('SM2', (e) => {
  let errors = []

  if(firstname_input){
    // If we have a firstname input then we are in the signup
    errors = getSignupFormErrors(username_input.value, password_input.value,)
  }
  else{
    // If we don't have a firstname input then we are in the login
    errors = getLoginFormErrors(username_input.value, password_input.value)
  }

  if(errors.length > 0){
    // If there are any errors
    e.preventDefault()
    error_message.innerText  = errors.join(". ")
  }
})

function getLoginFormErrors(UN2, PW2){
  let errors = []

  if(UN2 === '' || UN2 == null){
    errors.push('Username is required')
    username_input.parentElement.classList.add('incorrect')
  }

  if(PW2 === '' || PW2 == null){
    errors.push('Password is required')
    password_input.parentElement.classList.add('incorrect')
  }

  return errors;
}

const allInputs = [username_input, password_input].filter(input => input != null)

allInputs.forEach(input => {
  input.addEventListener('input', () => {
    if(input.parentElement.classList.contains('incorrect')){
      input.parentElement.classList.remove('incorrect')
      error_message.innerText = ''
    }
  })
})