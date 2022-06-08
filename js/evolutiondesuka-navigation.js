/*
 * EvolutionDesuKa hamburger behaviour
 */
document.addEventListener('click', e => {

   let elem = e.target
   let page = window.location

   /* 
    * if we are leaving the page - close the dropdown :
    * to prevent media query shifting menu (mobile) & changing displays (ipad) while loading new page,
    * we hide navigation dropdown prior to leaving page (while excluding same page anchor links)
    */
   if(elem.tagName === 'A'){  
      if (elem.pathname != page.pathname || elem.protocol != page.protocol || elem.host != page.host) {
         document.getElementById('evolutiondesuka_dropdown').style.display = 'none'
         return
      }
   }
   else {
      /* if current is not anchor, is any parent container..? */
      const parent = evolutiondesuka_hasParentOfType(elem,'A')
      if(parent !== false) {
         if (parent.pathname != page.pathname || parent.protocol != page.protocol || parent.host != page.host) {
            document.getElementById('evolutiondesuka_dropdown').style.display = 'none'
            return
         }
      }
   }

   /*
    * toggle dropdowns
    */
   const isDropdownButton = elem.matches("[data-evolutiondesuka-dropdown-button]")
   if(!isDropdownButton && elem.closest("[data-evolutiondesuka-dropdown]") != null) return
   let currentDropdown
   if(isDropdownButton) {
      currentDropdown = elem.closest("[data-evolutiondesuka-dropdown]")
      currentDropdown.classList.toggle('evolutiondesuka_active_menu')

      /* toggle hide on window scroll - we display dropdown scroll in it's place */
      document.body.classList.toggle('evolutiondesuka-dropdown-active')
   }
   document.querySelectorAll("[data-evolutiondesuka-dropdown].evolutiondesuka_active_menu").forEach(dropdown => {
      if(dropdown === currentDropdown) return
      dropdown.classList.remove('evolutiondesuka_active_menu')
   })
})


function evolutiondesuka_hasParentOfType(node, type) {
   if (type !== 'BODY' && node.nodeName === 'BODY') return false;
   if (type === node.nodeName) return node;
   return evolutiondesuka_hasParentOfType(node.parentNode, type);
}

/* 
 * accessibilty 
 */
function evolutiondesuka_toggle_sub_menu(el) {

   const isSubMenuToggle = el.matches("[data-evolutiondesuka-dropdown-toggle-submenu]")
   if(!isSubMenuToggle && el.closest("[data-evolutiondesuka-dropdown]") != null) return
   
   let currentDropdown
   if(isSubMenuToggle) {
      currentDropdown = el.closest(".menu-item.menu-item-has-children")
      currentDropdown.classList.toggle('evolutiondesuka_active_sub_menu')

   	// On tab-away collapse the menu.
      el.parentNode.querySelectorAll( 'ul > li:last-child > a' ).forEach( function( linkEl ) {
         linkEl.addEventListener( 'blur', function( event ) {
            if ( ! el.parentNode.contains( event.relatedTarget ) ) {
               currentDropdown.classList.toggle('evolutiondesuka_active_sub_menu')
               el.setAttribute( 'aria-expanded', 'false' );
            }
         } )
      } )
   }
}

