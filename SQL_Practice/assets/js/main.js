


import { panelActions } from './actions.js';
import { renderApp } from './render.js';

document.addEventListener('click', handleActionClick);	
	
	
function handleActionClick (event) {
	
    const targetElement = event.target.closest('[data-action]');
    if (!targetElement) return;

    const action = targetElement.dataset.action;
    const value = targetElement.dataset.value;

    if (panelActions[action]) {
        panelActions[action](value);
        renderApp();
    }
}