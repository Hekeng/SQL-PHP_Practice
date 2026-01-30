import { appState } from './state.js';

export function renderApp() {
    const body = document.body;

    // В JS пишем camelCase -> в HTML станет data-auth-status
    body.dataset.authStatus = appState.auth.authStatus;
    body.dataset.authOverlay = appState.auth.authOverlay;
    body.dataset.authOverlayTab = appState.auth.authOverlayTab; // добавил заглавную T

    // Важно: переводим boolean в строку для CSS
    body.dataset.sidebarStatus = appState.sidebar.sidebarStatus ? 'open' : 'closed';

    body.dataset.switchTabButtons = appState.sidebar.tabButtons;
    
    body.dataset.sidebarNavButtonsStatus = appState.sidebar.sidebarNavButtonsStatus;
    body.dataset.sidebarDashboardStatus = appState.sidebar.sidebarDashboardStatus;
}