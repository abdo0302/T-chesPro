// show form creer
let section_Categories=document.querySelector('.Categories')
let button_creer=document.querySelector('.button_creer')
let Créer=document.querySelector('.Créer')
let close_form=document.querySelector('.close_form')

button_creer.onclick=()=>{
    Créer.style.display='flex'
    section_Categories.style.display='none'
}
close_form.onclick=()=>{
    Créer.style.display='none'
}
// show form ajout categori
let button_ajout_categori=document.querySelector('.button_ajout_categori')
let contenar_ajout=document.querySelector('.contenar_ajout')
let contenar_select_supprimer=document.querySelector('.contenar_select_supprimer')
button_ajout_categori.onclick=()=>{
    contenar_ajout.style.display='flex'
    contenar_select_supprimer.style.display='none'
}

// show contenar select supprimer
let button_supprimer=document.querySelector('.button_supprimer')
button_supprimer.onclick=()=>{
    contenar_ajout.style.display='none'
    contenar_select_supprimer.style.display='flex'
}

//close section Categories
let close_form_categories=document.querySelector('.close_form_categories')


close_form_categories.onclick=()=>{
    section_Categories.style.display='none'
    
}
//show form de categories
let button_categories=document.querySelector('.button_categories')
button_categories.onclick=()=>{
    Créer.style.display='none'
    section_Categories.style.display='flex'
}

//section_modifier
let close_form_modifier=document.querySelector('.close_form_modifier')
let section_modifier=document.querySelector('.section_modifier')

close_form_modifier.onclick=()=>{
    section_modifier.style.display='none'
}
//
let closee=document.querySelector('.close')
let section_Afficher=document.querySelector('.section_Afficher')
closee.onclick=()=>{
    section_Afficher.style.display='none';
}
//section_inpourt
let close_form_inpourt=document.querySelector('.close_form_inpourt')
let button_inpourt=document.querySelector('.button_inpourt')
let section_inpourt=document.querySelector('.section_inpourt')
close_form_inpourt.onclick=()=>{
    section_inpourt.style.display='none'
}

button_inpourt.onclick=()=>{
    section_inpourt.style.display='flex'
}
//modifier color body
let clos=document.querySelector('.clos')
let modifier_color_card=document.querySelector('.modifier_color_card')
let button_modifier_color=document.querySelector('.button_modifier_color')

clos.onclick=()=>{
    modifier_color_card.style.display='none'
}

button_modifier_color.onclick=()=>{
    modifier_color_card.style.display='flex'
}

