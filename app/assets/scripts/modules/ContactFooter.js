import $ from 'jquery';

class ContactFooter {
	constructor() {
		this.contactButton = $('.site-footer__contact-button');
		this.siteFooter = $('.site-footer');
		this.closeButton = $('.site-footer__close-button');
		this.events();
	}

	events() {
		this.contactButton.click(this.toggleFooter.bind(this));
		this.closeButton.click(this.closeFooter.bind(this));
	}

	toggleFooter() {
		this.siteFooter.toggleClass('site-footer--expanded');
	}

	closeFooter() {
		this.siteFooter.removeClass('site-footer--expanded');
	}

}

export default ContactFooter;