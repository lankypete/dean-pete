import $ from 'jquery';
import RevealOnScroll from "./base/RevealOnScroll";
import DavidLazyLoad from "./base/DavidLazyLoad";
import ContactFooter from "./modules/ContactFooter";
import Nav from "./modules/Nav";

new RevealOnScroll($(".site-footer"),"100%");
var davidLazyLoad = new DavidLazyLoad();
var contactFooter = new ContactFooter();
var nav = new Nav();
