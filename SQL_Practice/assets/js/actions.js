import { appState } from './state.js';

export const panelActions = {

	openAuthOverlay(value) {
        appState.auth.authOverlay = value;
    },

	closeAuthOverlay(value) {
        appState.auth.authOverlay  = value;
    },


	switchAuthTab(tabName) {
		appState.auth.authStatus = tabName; 
    },





    loginAsUser() {
        appState.auth.authStatus= 'user';
        appState.auth.authOverlay = 'closed';
		appState.sidebar.sidebarStatus = true;
        // appState.sidebar.sidebarStatus = "closed";
    },

    toggleSidebar() {
		appState.sidebar.sidebarStatus = !appState.sidebar.sidebarStatus;
        // appState.sidebar.visible = !appState.sidebar.visible;
    },

    switchSidebarPanel(panelName) {
        appState.sidebar.sidebarDashboardStatus = panelName;
    }

};