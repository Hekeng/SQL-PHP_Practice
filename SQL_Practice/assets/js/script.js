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
 

// var perem = "hallo world!"
// console.log(perem);

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
var panelActions = {
    open: openPanel,
    close: closePanel,
	switch: switchPanel
};

var actionButtons = document.querySelectorAll("[data-action]");
var panels = document.querySelectorAll("[data-panel]");

actionButtons.forEach(function (button) {
    button.addEventListener("click", handleActionClick);
});

function handleActionClick(e) {
    var action = e.currentTarget.dataset.action;
    var target = e.currentTarget.dataset.target;

    if (panelActions[action]) {
        panelActions[action](target, e);
    }
}

function openPanel(target, e) {
	for (var i = 0; i < panels.length; i++) {
		var panel = panels[i];
		if (panel.dataset.panel === target) {
			panel.classList.remove("is-none");
		}
	}
}

function closePanel(target, e) {
	panels.forEach(function (panel) {
		if (panel.dataset.panel === target) {
			     panel.classList.add("is-none");
        
		}
	});
	
}

function switchPanel(target, e) {

	for (let i = 0; i < actionButtons.length; index++) {
		var button  = actionButtons[i];
		if (data-panel === data-target) {
			
		}
		if (panel.dataset.panel === target) {
			panel.classList.remove("is-none");
		}
		
	}
	
}


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
//     var panel = document.querySelector('[data-panel="' + panelName + '"]');
//     if (panel !== null) {
//         panel.style.display = "block";
//     }
// }

// function closeWindow(panelName) {
//     var panel = document.querySelector('[data-panel="' + panelName + '"]');
//     if (panel !== null) {
//         panel.style.display = "none";
//     }
// }