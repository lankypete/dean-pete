import $ from "jquery";

class Nav {

	constructor() {
		this.nav = $(".site-header");
		this.path = window.location.pathname.split('/');
		this.submenu = this.path[1];
		this.submenuSelector = $('[data-submenu-name="'+ this.submenu +'"]');
		this.page = this.path.pop();
		this.pageSelector = $('[data-link="'+ this.page +'"]');
		this.pathValueLog();
		this.addSubmenu();
		this.addActiveClass();
	}

	//find out which menu to dropdown
	addSubmenu() {
		this.nav.addClass("site-header--" + this.submenu + "-visible");
	}

	//highlight the current active link
	addActiveClass() {
		if (this.submenu == 'index.php' | this.submenu == '') this.submenuSelector = $('[data-submenu-name="websites"]');;
		this.submenuSelector.addClass('active');
		this.pageSelector.addClass('active');
	}

	pathValueLog() {
		console.log(this.path);
		console.log(this.submenu);
		console.log(this.submenuSelector);
		console.log(this.page);
		//$(this.submenuSelector).css('background-color','red');
	}




}

export default Nav;