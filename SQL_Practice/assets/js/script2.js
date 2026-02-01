// | Атрибут       | Что хранит        |                       Пример                            |

// | `data-action` | Что делает элемент                       `open`, `close`, `toggle`, `switch`|
// | `data-target` | На что влияет/кому действие              `auth-overlay`, `menu-main`        |
// | `data-panel`  | Идентификатор панели/модалки/контейнера  `auth`, `profile`, `settings`      |
// | `data-view`   | Внутреннее состояние панели или вкладка  `login`, `register`, `details`     |
// | `data-state`  | Состояние элемента, можно динам. менять  `active`, `disabled`, `expanded`   |
// | `data-label`  | Человеческое имя/логическая идентификация `main-nav`, `submit-button`       |
// | `data-index`  | Позиция в списке, массиве, слайдере       `0`, `1`, `2`                     |
// | `data-id`     | Кастомный идентификатор объекта (не DOM id)'user_1234`                      |
// | `data-type`   | Тип объекта/контента                       `modal`, `alert`, `tab`          |

//console.log(typeof act); // скажет "string", "object" и т.д.
//console.dir(act);        // для объектов / массивов покажет структуру
 

// let perem = "hallo world!"
// console.log(perem);

// // Поиск одного элемента
// let loginForm = document.querySelector('#form-login');

// // Поиск группы элементов (например, всех кнопок табов)
// let tabs = document.querySelectorAll('.tab-btn');

// element.classList.add('is-hidden');//(JS переключает рычаг, а CSS решает, как это выглядит).

// Синтаксис: элемент.addEventListener('тип_события', функция_обратного_вызова);
// button.addEventListener('click', function() {
//     console.log('Кнопка нажата!');
// });
 
// let auth_tabs = document.getElementById('auth_tab');

// let user = { name: "Олег", age: 30 };
// let perem = user["name"];
// let perem1 = user["age"];
// console.log(perem);

// let {rname, age} = user;

// console.log(name);
// console.log(age);

// let {name: userName, age: userAge} = user;

// console.log(userName);
// console.log(userAge);

// let {gender = "male"} = user;
// console.log(user.gender);
// console.log(gender);


//--------------------------------------------------------------
let panelActions = {
    open: openPanel,
    close: closePanel,
	switch: switchPanel
};

const actionButtons = document.querySelectorAll("[data-action]");
const submitForms = document.querySelectorAll('[data-form="auth"]');

// console.log("Найдено форм:", submitForms.length);

submitForms.forEach(function (form) {
    form.addEventListener("submit", handleSubmitButton);

})

function handleSubmitButton(event) {
    event.preventDefault();
    let form = event.currentTarget;
	let action = form.dataset.action;
	// let target = clickedButton.dataset.target;
    if (panelActions[action]) {
        panelActions[action](form);
		
    }
	setAuthStatus('user');//убрать!!!
	console.log(action);
	console.log(form);

	// updateHeaderButton(); 
    // sendDataToServer(form);
    
}

actionButtons.forEach(function (button) {
    button.addEventListener("click", handleActionClick);
});

function handleActionClick(e) {
    if (e.currentTarget.tagName === 'FORM') return;
    let triggerElement = e.currentTarget;
	let action = triggerElement.dataset.action;
	// let target = clickedButton.dataset.target;
    if (panelActions[action]) {
        panelActions[action](triggerElement);
		
    }
    inputAutofocus(triggerElement);
}

function openPanel(triggerElement) {
	let targetPanel = getPanel(triggerElement);
	if (!targetPanel) return;
	targetPanel.classList.remove("is-none");
}

function closePanel(triggerElement) {
	let targetPanel = getPanel(triggerElement);
	if (!targetPanel) return;
	targetPanel.classList.add("is-none"); 	
}

function switchPanel(triggerElement) {
    if (triggerElement.classList.contains("is-active")) {
        return;
    }
    switchTabs(triggerElement);
    switchPanels(triggerElement);
}

function getPanel(triggerElement) {
    let target = triggerElement.dataset.target;
    if (!target) return null; 
    return document.querySelector('[data-panel="' + target + '"]') || null;
}


function switchTabs(triggerElement) {
    let tabsContainer = triggerElement.closest('[data-panel="switch-tabs-container"]');
	if (!tabsContainer) return;
    let tabs = tabsContainer.querySelectorAll('[data-action="switch"]');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove("is-active");
    }
    triggerElement.classList.add("is-active");
}

function switchPanels(triggerElement) {

	let targetPanel = getPanel(triggerElement);
	if (!targetPanel) return;
	let container =  targetPanel.parentElement;
	let targetFamily = container.children;

	for (let i = 0; i < targetFamily.length; i++) {
		let panel = targetFamily[i];
		if (panel === targetPanel) { 
				panel.classList.remove("is-hidden");
                // inputaUtofocus(container);
			} else {
				panel.classList.add("is-hidden");
		}
	}
    container.classList.add("is-active");

}

function setAuthStatus(status) {
	document.body.dataset.status = status;
    console.log("Статус изменен на:", status);
}


function inputAutofocus(triggerElement) {
    let target = triggerElement.dataset.target;
    if (!target) return;

    let targetCollection = document.querySelector(`[data-panel="${target}"]`);
    if (!targetCollection) return;

    // Ищем форму: проверяем сам элемент или ищем внутри
    let firstForm;
    if (targetCollection.tagName === 'FORM') {
        firstForm = targetCollection;
    } else {
        firstForm = targetCollection.querySelector('form');
    }

    if (!firstForm) return;

    // Ищем первый видимый инпут
    let activeInput = firstForm.querySelector('input:not([type="hidden"])');
    
    if (activeInput) {
        activeInput.focus();
    }
}
// function switchPanel(e) {
	
// 	let clickedButton = e.currentTarget;
// 	let container = clickedButton.closest('[data-panel="switch-tabs-container"]');
// 	let targetFamily = container.querySelectorAll('[data-action="switch"]');


// 		for (let i = 0; i < targetFamily.length; i++) {
// 			let button  = targetFamily[i];
// 			button.classList.remove("is-active");
// 		}
// 		clickedButton.classList.add("is-active");
// 	// }

// 	let target = e.currentTarget.dataset.target;
// 	let targetPanel = document.querySelector('[data-panel="' + target + '"]');
// 	container =  targetPanel.parentElement;
// 	targetFamily = container.children;


// 	for (let i = 0; i < targetFamily.length; i++) {
// 		let panel = targetFamily[i];

// 		if (panel.dataset.panel === target) {
// 			panel.classList.remove("is-hidden");
// 		} else{
// 		panel.classList.add("is-hidden");
// 		}
// 	}
	
// 	// e.currentTarget.classList.remove("is-hidden");
	
// }


// const actions = {
//   open: ({ target }) => openPanel(target),
//   close: ({ target }) => closePanel(target),
//   switch: ({ target, view }) => switchView(target, view)
// };
//--------------------------------------------------------------
// let proba = actions[actionName];
// proba(target);

// buttons.forEach(button => {
   
//    button.addEventListener('click', event => {
//         print_button(event);
//         rename_data_set (event);
//    })
	
// });

// function print_button (event) {

//         const action = event.currentTarget.dataset.action;
//         const target = event.currentTarget.dataset.target; 
        
//         console.log('Кнопка нажата: ' + target + ' ' + action);
// }

// function rename_data_set (event) {
//         let act = event.currentTarget.dataset.action;
//         let tar = event.currentTarget.dataset.target;
//         act = "new_action";
//         tar = "new_target";

//         event.currentTarget.dataset.action = act;
//         event.currentTarget.dataset.target = tar;
// }

// const actions = {
//   open: ({ target }) => openPanel(target),
//   close: ({ target }) => closePanel(target),
//   switch: ({ target, view }) => switchView(target, view)
// };

// document.addEventListener('click', e => {
//   const el = e.target.closest('[data-action]');
//   if (!el) return;

//   const action = el.dataset.action;
//   actions[action]?.(el.dataset);
// });

// function openWindow(panelName) {
//     // Ищем окно по data-panel
//     let panel = document.querySelector('[data-panel="' + panelName + '"]');
//     if (panel !== null) {
//         panel.style.display = "block";
//     }
// }

// function closeWindow(panelName) {
//     let panel = document.querySelector('[data-panel="' + panelName + '"]');
//     if (panel !== null) {
//         panel.style.display = "none";
//     }
// }