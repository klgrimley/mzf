function createMarker(e,t,n,r,i,s,o){var u=n+"/images/icons/shadow.png",a=n+"/images/icons/blue-dot.png",f=n+"/images/icons/red-dot.png",l=n+"/images/icons/green-dot.png",c=n+"/images/icons/yellow-dot.png",h=n+"/images/icons/teal-dot.png",p=n+"/images/icons/black-dot.png",d=n+"/images/icons/white-dot.png",v=n+"/images/icons/purple-dot.png",m=n+"/images/icons/pink-dot.png",g=s,y=n+"/images/icons/red-dot.png";s=="blue"?y=a:s=="red"?y=f:s=="green"?y=l:s=="yellow"?y=c:s=="teal"?y=h:s=="black"?y=p:s=="white"?y=d:s=="purple"?y=v:s=="pink"?y=m:y=g;var b=new google.maps.Marker({map:e,draggable:!1,animation:google.maps.Animation.DROP,position:t,icon:y,title:i}),w=new google.maps.InfoWindow({content:o});google.maps.event.addListener(b,"click",function(){o==""?window.location=r:w.open(e,b)});return b};