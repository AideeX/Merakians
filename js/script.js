var pageContainer = document.querySelector('.page-container'),
    signUpLink = document.querySelector('.sign-up-link'),
    signInLink = document.querySelector('.sign-in-link');
console.log('script file');
console.log(`signin ${signInLink}, signup ${signUpLink}, pageCOntainer ${pageContainer}`);

signUpLink.addEventListener('click', function () {
   pageContainer.classList.add('signup')
});

signInLink.addEventListener('click', function () {
   pageContainer.classList.remove('signup')
});