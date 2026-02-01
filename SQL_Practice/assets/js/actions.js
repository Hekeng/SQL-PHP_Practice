import { appState } from './state.js';

export const panelActions = {

	openAuthOverlay(value) {
        appState.auth.authOverlay = value;
    },

	closeAuthOverlay(value) {
        appState.auth.authOverlay  = value;
    },


	switchAuthTab(tabName) {
		appState.auth.authOverlayTab = tabName; 
    },

    loginAsUser() {
        
        appState.auth.authStatus= 'user';
        appState.auth.authOverlay = 'closed';
		appState.sidebar.sidebarStatus = true;
;
    },

    toggleSidebar() {
		appState.sidebar.sidebarStatus = !appState.sidebar.sidebarStatus;
 
        console.log('appState.sidebar.sidebarStatus' + appState.sidebar.sidebarStatus );

    },


    
    switchTabButtons(tabName){

        const s = appState.sidebar;

        // Сценарий А: Панель открыта и мы жмем на ТУ ЖЕ кнопку -> ЗАКРЫВАЕМ
        if (s.sidebarDashboardStatus === 'open' && s.tabButtons === tabName) {
            s.sidebarDashboardStatus = 'closed';
            // tabButtons не зануляем, чтобы CSS понимал, какую вкладку "потушить" красиво
            return; 
        }

        // Сценарий Б: Панель открыта, но мы жмем на ДРУГУЮ кнопку -> ПРОСТО МЕНЯЕМ ТАБ
        if (s.sidebarDashboardStatus === 'open' && s.tabButtons !== tabName) {
            s.tabButtons = tabName;
            return;
        }

        // Сценарий В: Панель закрыта (неважно какая кнопка) -> ОТКРЫВАЕМ
        s.sidebarDashboardStatus = 'open';
        s.tabButtons = tabName;
            
    },

    closeOptionsBar(){
        appState.sidebar.sidebarDashboardStatus = 'closed';
    }


};