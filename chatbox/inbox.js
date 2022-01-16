 var tabs = document.querySelectorAll(".tabs ul li");
 var all = document.querySelectorAll(".all");
 var unread = document.querySelectorAll(".all.unread");

 tabs.forEach((tab)=>{
 	tab.addEventListener("click", ()=>{
 		tabs.forEach((tab)=>{
 			tab.classList.remove("active");
 		})

 		tab.classList.add("active");

 		var tabval = tab.getAttribute("data-li");

 		all.forEach((item)=>{
 			item.style.display = "none";
 		})

 		if(tabval == "all"){	
 			all.forEach((item)=>{
 				item.style.display = "flex";
 			})
 		}
 		else if(tabval == "unread"){
 			unread.forEach((item)=>{
 				item.style.display = "flex";
 			})
 		}
 		

 	})
 })