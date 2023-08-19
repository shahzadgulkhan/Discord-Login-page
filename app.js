// Show error message if login fails
const urlParams = new URLSearchParams(window.location.search);
const error = urlParams.get('error');
if (error) {
  const errorMessage = document.createElement('p');
  errorMessage.classList.add('error');
  errorMessage.textContent = error;
  document.querySelector('.container').appendChild(errorMessage);
}
