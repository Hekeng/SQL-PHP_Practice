


import { panelActions } from './actions.js';
import { renderApp } from './render.js';

document.addEventListener('click', handleActionClick);	
// document.addEventListener('submit', handleActionClick);	
	
function handleActionClick (event) {
	if (event.type == 'submit') {
            // event.preventDefault();
            console.log(event.type);
    }
    const targetElement = event.target.closest('[data-action]');
    if (!targetElement) return;

    const action = targetElement.dataset.action;
    const value = targetElement.dataset.value;

    console.log(action);
    console.log(value);
    

    if (panelActions[action]) {
        panelActions[action](value);
        renderApp();
    }
}