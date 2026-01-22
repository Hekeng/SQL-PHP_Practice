
var perem = "hallo world!"
console.log(perem);

// // Поиск одного элемента
// var loginForm = document.querySelector('#form-login');

// // Поиск группы элементов (например, всех кнопок табов)
// var tabs = document.querySelectorAll('.tab-btn');

// element.classList.add('is-hidden');//(JS переключает рычаг, а CSS решает, как это выглядит).

// Синтаксис: элемент.addEventListener('тип_события', функция_обратного_вызова);
// button.addEventListener('click', function() {
//     console.log('Кнопка нажата!');
// });
 
// let auth_tabs = document.getElementById('auth_tab');
let auth_tabs = document.querySelectorAll('ul>li>button')
auth_tabs.forEach(button => {
   
   button.addEventListener('click', print_button);
	
});

function print_button (event) {
   
        const target = event.currentTarget.dataset.target; 
        
        console.log('Кнопка нажата: ' + target);
}
// console.log(auth_tabs);