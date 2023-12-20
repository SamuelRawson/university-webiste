const form = document.getElementById("form");
const firstName = document.getElementById("first_name");
const middleName = document.getElementById("middle_name");
const surname = document.getElementById("surname");
const gender = document.getElementById("gender");
const phone = document.getElementById("phone");
const date = document.getElementById("date_birth");
const email = document.getElementById("email");
const password = document.getElementById("password");

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    checkInputs();
})
function checkInputs(){ 
    const firstNameValue = first_name.value.trim();
    const middleNameValue = middleName.value.trim();
    const surnameValue = surname.value.trim();
    const genderValue = gender.value.trim();
    const phoneValue = phone.value.trim();
    const dateValue = date.value.trim();
    const emailValue = email.value.trim();
    const passwordValue =  password.value.trim();

    if(firstNameValue ==''){
        setErrorFor(firstName);
    }else{
        setSuccessFor(firstName);
    }
    if(middleNameValue ==''){
        setErrorFor(middleName);
    }else{
        setSuccessFor(middleName);
    }
    if(surnameValue ==''){
        setErrorFor(surname);
    }else{
        setSuccessFor(surname);
    }
    if(genderValue ==''){
        setErrorFor(gender);
    }else{
        setSuccessFor(gender);
    }
    if(phoneValue ==''){
        setErrorFor(phone);
    }else{
        setSuccessFor(phone);
    }
    if(dateValue ==''){
        setErrorFor(date);
    }else{
        setSuccessFor(date);
    }
    if(emailValue ==''){
        setErrorFor(email);
    }else{
        setSuccessFor(email);
    }
    if(passwordValue ==''){
        setErrorFor(password);
    }else{
        setSuccessFor(password);
    }
}
function setErrorFor(input){
    const formControl = input.parentElement;
    
    formControl.className = 'form-control error';
}
function setSuccessFor(input){
    const formControl = input.parentElement;

    formControl.className = 'form-control success';
}
