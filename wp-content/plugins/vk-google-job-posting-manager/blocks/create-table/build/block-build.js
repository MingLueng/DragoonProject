!function(){"use strict";var e={n:function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,{a:n}),n},d:function(t,n){for(var o in n)e.o(n,o)&&!e.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:n[o]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.element,n=(window.React,window.wp.i18n),o=window.wp.blocks,l=window.wp.serverSideRender,r=e.n(l),a=window.wp.components,i=window.wp.blockEditor;(0,o.registerBlockType)("vk-google-job-posting-manager/create-table",{title:(0,n.__)("Job Posting","vk-google-job-posting-manager"),category:"vk-blocks-cat",attributes:{post_id:{type:"number",default:0},style:{type:"string",default:"default"},className:{type:"string",default:""}},edit:function(e){var o=e.attributes,l=e.setAttributes,u=o.style;return o.post_id=document.getElementById("post_ID").value,(0,t.createElement)(t.Fragment,null,(0,t.createElement)(i.InspectorControls,null,(0,t.createElement)(a.PanelBody,null,(0,t.createElement)(a.BaseControl,{id:"vkgjpm-tableStyle",label:(0,n.__)("Table Style","vk-google-job-posting-manager"),help:(0,n.__)("The preview will work after publish or save action.","vk-google-job-posting-manager")},(0,t.createElement)(a.SelectControl,{value:u,onChange:function(e){return l({style:e})},options:[{value:"default",label:(0,n.__)("Default","vk-google-job-posting-manager")},{value:"stripe",label:(0,n.__)("Stripe","vk-google-job-posting-manager")}]})))),(0,t.createElement)("div",null,(0,t.createElement)(r(),{block:"vk-google-job-posting-manager/create-table",attributes:o})))},save:function(){return null}})}();