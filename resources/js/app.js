import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
const buttons = document.querySelectorAll('.delete-button');
buttons.forEach((button) =>{
    button.addEventListener("click",(event) =>{
        event.preventDefault();
        const titleData = button.getAttribute('data-item');
        const modal = document.getElementById('delete-modal');
        const myModal = new bootstrap.Modal(modal);
        const title = document.querySelector('#title');
        title.textContent = titleData;
        myModal.show();
        const deleteButton = modal.querySelector('.btn-primary');
        deleteButton.addEventListener('click',()=>{
            button.parentElement.submit();
        })
    });
})