

export const appState = {
	header:{

	},


    auth: {
        authStatus: 'guest',      			// guest | user | admin
        authOverlay: 'closed',    			// open | closed
		authOverlayTab: 'authorization'    	// authorization | registration
    },

	content:{

	},

	sidebar: {
			sidebarStatus: false,  	
			sidebarNavButtonsStatus: 'open',	//open | closed
			sidebarDashboardStatus: 'closed',  	//open | closed
			tabButtons: ''						//null | settings | firstIndex | secondIndex
    },

	footer:{


	}
	
};