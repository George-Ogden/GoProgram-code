let length=0;var client=apigClientFactory.newClient(),word="",used="";function run(){$("#start").hide(),length=parseInt($("#length").val()),word="_".repeat(length),$(".section.interactive > .main > *").hide(),$(".section.interactive .main .main").removeClass("d-none"),$(".section.interactive .main .main").show(),update()}function guess(){$(".section.interactive .main .main .guess").text("Guess: ?"),$(".section.interactive .main .main .info").text("Thinking ..."),client.guess(word,used).then(function(t){if(t.status>=200&&t.status<300){var e=t.data.toUpperCase();$(".section.interactive .main .main button.done").show(),$(".section.interactive .main .main .guess").html(`Guess: <span class=font-weight-bold>${e}</span>`),$(".section.interactive .main .main .info").html(`Please, select all the letters that are <span class=font-weight-bold>${e}</span><br> Then, press "Done"`),$(".section.interactive .main .main .info").after(""),$("button.letter.available").prop("disabled",!1),$("button.letter.available").on("click",function(){$(this).text("_"==$(this).text()?e:"_")}),$("button.done").on("click",function(){word="",used+=e,$("button.letter").each(function(){word+=$(this).text()}),update()})}}).catch(t=>console.log(t))}function update(){for(var t of($("button").unbind("click"),html="",word))html+=`<button class="letter my-5 d-inline${"_"==t?" available":""}" disabled>${t}</button>`;if($(".section.interactive .main .buttons").html(html),40*length>$(".section.interactive .main .main .buttons").width()&&($(".section.interactive .main .main .buttons button.letter").css("font-size",`${$(".section.interactive .main .main .buttons").width()/length/20}em`),$(".section.interactive .main .main .buttons button.letter").width($(".section.interactive .main .main .buttons ").width()/length)),used.length>25)$(".section.interactive .main .main .guess").html("I'm out of guesses!"),$(".section.interactive .main .main .info").html("Something seems wrong!"),$(".section.interactive .main .main button.done").text("Reset"),$(".section.interactive .main .main button.done").on("click",function(){location.reload()});else if(word.includes("_"))$(".section.interactive .main .main button.done").hide(),guess();else{var e=used.length;$(".section.interactive .main .main .guess").html(`Wow! That took ${e} guess${1==e?"":"es"}<br> and ${e-new Set(word).size} ${e-new Set(word).size==1?"was":"were"} incorrect!`),$(".section.interactive .main .main .info").html("Thanks for using this tool and improving the AI for the next user!"),$(".section.interactive .main .main button.done").text("Reset"),$(".section.interactive .main .main button.done").on("click",function(){location.reload()}),client.update(word)}}$("#start").on("click",run),$("section").animate({scrollTop:$("#main").offset().top},2e3,"easeOutExpo");