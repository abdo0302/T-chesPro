let button_Create_account=document.querySelector('.Create_account')
let form_login=document.querySelector('.form_login')
button_Create_account.onclick=()=>{
    console.log('ghj');
    form_login.style.display='none'
    Sign_up.style.display='flex'
}

let button_Log_in=document.querySelector('.Log_in')
let Sign_up=document.querySelector('.Sign_up')
button_Log_in.onclick=()=>{
    Sign_up.style.display='none'
    form_login.style.display='flex'
}
// form sin in validation
let submit_sin_in=document.querySelector('.submit_sin_in')
let email_sin_in=document.querySelector('.email_sin_in')
let password_sin_in=document.querySelector('.password_sin_in')
let sin_in_validi=false

submit_sin_in.onclick=()=>{
  let email_valid=false  
  let value_email=email_sin_in.value
  let value_password=password_sin_in.value
  
    for (let i = 0; i < value_email.length; i++) {
        if(value_email[i]=="@"){
           email_valid=true
        }
        
    }
    if(email_valid !==true){
        email_sin_in.style.border="1px solid red"
    }else if(value_password== ''){
        password_sin_in.style.border="1px solid red"
    }else{
        sin_in_validi=true
    }
}

// form sin up validation
let input_name=document.querySelector('.input_name')
let input_email=document.querySelector('.input_email')
let input_password=document.querySelector('.input_password')
let submit_sin_up=document.querySelector('.submit_sin_up')
let sin_up=false
submit_sin_up.onclick=()=>{
    let value_input_name=input_name.value
    let value_input_email=input_email.value
    let value_input_password=input_password.value
    let input_email_valid=false

    for (let i = 0; i < value_input_email.length; i++) {
        if(value_input_email[i]=="@"){
            input_email_valid=true
         }
    }

    if(input_email_valid !==true){
        input_email.style.border="1px solid red"
    }else if(value_input_name ==''){
        input_name.style.border="1px solid red"
    }else if(value_input_password==''){
        input_password.style.border="1px solid red"
    }else{
        sin_up=true

        input_email.style.border="2px solid rgb(190, 190, 190)"
        input_name.style.border="2px solid rgb(190, 190, 190)"
        input_password.style.border="2px solid rgb(190, 190, 190)"
    }
}