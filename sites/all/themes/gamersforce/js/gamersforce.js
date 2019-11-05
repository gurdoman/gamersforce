jQuery(document).ready(function($) {

    function drawChart(contenedor, calificacion, notCalif) {

        var data = google.visualization.arrayToDataTable([
          ['', ''],
          ['', calificacion],
          ['', notCalif],
        ]);

        var options = {
          pieHole: 0.5,
          legend: 'none',
          pieSliceText: 'none',
          tooltip: { trigger: 'none' },
          pieSliceBorderColor:"transparent",
          backgroundColor: { fill:'transparent' },
          slices: {
            0: { color: '#4c154a' },
            1: { color: 'transparent' }
          }
        };

        var chart = new google.visualization.PieChart(contenedor);
        chart.draw(data, options);
    } 
    
    function getUrlParameter(sParam){
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++){
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam){
                return sParameterName[1];
            }
        }
    }
    
    if (/videos/.test(self.location.href)){
        if(getUrlParameter('id')){
           $('#videoPlayer').attr("src",'https://www.youtube.com/embed/'+getUrlParameter('id'));
           $.get(
                "https://www.googleapis.com/youtube/v3/playlistItems",{
                    part: 'snippet',
                    maxResults: 50,
                    playlistId: 'UU_OeYCeJA9fhXv3rDny8y7Q',
                    key: 'AIzaSyCYKHzfyME4Ay2f7wnHB1ZHxOZ964yBSds'
                },
                function(data){
                    $.each(data.items, function(i, item){
                        videoTitle = item.snippet.title;
                        videoId = item.snippet.resourceId.videoId;
                        thumb = item.snippet.thumbnails.medium.url;
                        publicado = item.snippet.publishedAt.substr(0,10) +" "+ item.snippet.publishedAt.substr(11,8);
                        $('#otrosVideos').append('<div class="filaVideo col-xs-6 col-sm-4 col-md-12" data-id="'+videoId+'"><div class="videoThumb"><a href="#"><img src="'+thumb+'" /></a></div><div class="videoData"><div class="views-field-title"><span class="field-content"><a href="#">'+videoTitle+'</a></span></div><div class="views-field views-field-created"><span class="field-content">'+publicado+'</span></div></div></div>');
                    });
                    $('#otrosVideos').append('<div class="view-footer"><a href="https://www.youtube.com/channel/UC_OeYCeJA9fhXv3rDny8y7Q/videos"><div class="logo-yt"></div><span class="irCanal">IR AL CANAL</span></a></div>');
                    $('.filaVideo').each(function(){
                        $(this).on("click", function(e){
                            e.preventDefault();
                            console.log("click en filaVideo");
                            var id= $(this).attr("data-id");
                            window.location.href = "http://gamersforce.vg/videos?id="+id;  
                        }); 
                    });
                }        
            );
        }else{
            $.get(
                "https://www.googleapis.com/youtube/v3/playlistItems",{
                    part: 'snippet',
                    maxResults: 50,
                    playlistId: 'UU_OeYCeJA9fhXv3rDny8y7Q',
                    key: 'AIzaSyCYKHzfyME4Ay2f7wnHB1ZHxOZ964yBSds'
                },
                function(data){
                    $.each(data.items, function(i, item){
                        videoTitle = item.snippet.title;
                        videoId = item.snippet.resourceId.videoId;
                        thumb = item.snippet.thumbnails.medium.url;
                        publicado = item.snippet.publishedAt.substr(0,10) +" "+ item.snippet.publishedAt.substr(11,8);
                        if(i==0){
                            var src = 'https://www.youtube.com/embed/'+videoId;
                            $("#videoPlayer").attr("src",src);
                        }
                        $('#otrosVideos').append('<div class="filaVideo col-xs-6 col-sm-4 col-md-12" data-id="'+videoId+'"><div class="videoThumb"><a href="#"><img src="'+thumb+'" /></a></div><div class="videoData"><div class="views-field-title"><span class="field-content"><a href="#">'+videoTitle+'</a></span></div><div class="views-field views-field-created"><span class="field-content">'+publicado+'</span></div></div></div>');
                    });
                    $('#otrosVideos').append('<div class="view-footer"><a href="https://www.youtube.com/channel/UC_OeYCeJA9fhXv3rDny8y7Q/videos"><div class="logo-yt"></div><span class="irCanal">IR AL CANAL</span></a></div>');
                    $('.filaVideo').each(function(){
                        $(this).on("click", function(e){
                            e.preventDefault();
                            console.log("click en filaVideo");
                            var id= $(this).attr("data-id");
                            window.location.href = "http://gamersforce.vg/videos?id="+id;  
                        }); 
                    });
                }        
            );
        }
    }
    
    var is_root = location.pathname == "/";
    
    if (is_root || /indice/.test(self.location.href)){
        $.get(
            "https://www.googleapis.com/youtube/v3/playlistItems",{
                part: 'snippet',
                maxResults: 50,
                playlistId: 'UU_OeYCeJA9fhXv3rDny8y7Q',
                key: 'AIzaSyCYKHzfyME4Ay2f7wnHB1ZHxOZ964yBSds'
            },
            function(data){
                $.each(data.items, function(i, item){
                    videoTitle = item.snippet.title;
                    videoId = item.snippet.resourceId.videoId;
                    thumb = item.snippet.thumbnails.medium.url;
                    publicado = item.snippet.publishedAt.substr(0,10) +" "+ item.snippet.publishedAt.substr(11,8);
                    if(i==0){
                        var src = 'https://www.youtube.com/embed/'+videoId;
                        $("#youtubeVideoPrincipal").attr("src",src);
                    }else if (i>0 && i<5) {
                        $('#masVideos').append('<div class="filaVideo"><div class="videoThumb"><a href="videos?id='+videoId+'"><img src="'+thumb+'" /></a></div><div class="videoData"><div class="views-field-title"><span class="field-content"><a href="videos?id='+videoId+'">'+videoTitle+'</a></span></div><div class="views-field views-field-created"><span class="field-content">'+publicado+'</span></div></div></div>');
                    }
                });
                $('#masVideos').append('<div class="view-footer"><a href="videos">VER TODOS LOS VIDEOS</a></div>');
            }
        );
    }
    

    
    
    if (/gf-babes/.test(self.location.href)){
        $(".imagenGaleria").each(function(){
            $(this).on("click", function(){
                var src = $(this).attr("src");
                $("#imagenPrincipalGaleria").attr("src", src);
                
                var $this = $("#imagenPrincipalGaleria");
                
                var cuadrado;
                
                if ($this.width() > $this.height()) {
                    if($this.width() > (($this.width()/4)+$this.height()))
                        cuadrado = false;
                    else
                        cuadrado = true;
                }else{
                    if($this.height() > (($this.height()/4)+$this.width()))
                        cuadrado = false;
                    else
                        cuadrado = true;
                }

                if ($this.width() > $this.height() && cuadrado == false) {
                    if (window.innerWidth >= 1200)
                        $this.css({"width": "60%", "height": "auto", "margin-top" : "0"});
                    else if (window.innerWidth < 1200 && window.innerWidth >= 993)
                        $this.css({"width": "70%", "height": "auto", "margin-top" : "0"});
                    else if (window.innerWidth < 993 && window.innerWidth >= 768)
                        $this.css({"width": "95%", "height": "auto", "margin-top" : "0"});
                    else if(window.innerWidth < 768){
                        $this.css({"width": "95%", "height": "auto"});
                        var mt = (400 - $this.height())/2;
                        $this.css("margin-top", mt);
                    }
                }else if ($this.width() > $this.height() && cuadrado == true){
                    $this.css({"width": "auto", "height": "100%", "margin-top" : "0"});
                }else{
                    $this.css({"width": "auto", "height": "100%", "margin-top" : "0"});
                } 
            });
        });
        $(".imagenGaleria").first().click();
    }
    if (/noticias/.test(self.location.href) || /articulos/.test(self.location.href)){
        if(window.innerWidth < 768){
            var $this = $(".region-c-principal .field-content img");
            var mt = (250 - $this.height())/2;
            $this.css("margin-top", mt);
        }
        
        $(".region-c-x-categoria section").each(function(){
           $(this).addClass("col-md-2 col-xs-6"); 
        });
    }
    
    if (/reviews/.test(self.location.href)){
        
        $(".region-c-4-reviews .borrar").empty();
        
        $(".region-c-4-reviews .col-sm-6.col-md-3").each(function(){
           var href= $(this).find('.views-field-title a').attr("href"); 
           $(this).find('.views-field-field-calificacion a').attr("href", href);
        });
        
        $(".region-c-todas .views-row").each(function(){
           var href= $(this).find('.views-field-title a').attr("href"); 
           $(this).find('.views-field-field-calificacion a').attr("href", href);
        });
        
        var calificacionesCont = document.getElementsByClassName("calificacion_review");
        var calificaciones = document.getElementsByClassName("calificacion");
        
        for (var i = 0; i < calificaciones.length; i++) {
            var calificacion = parseFloat(calificaciones[i].textContent);
            calificaciones[i].innerHTML = calificacion;
            var notCalif = 10-calificacion;
            var contenedor = calificacionesCont[i];
            
            console.log("Calificacion: "+calificacion+" Not Calif: "+notCalif);
            
            drawChart(contenedor,calificacion, notCalif );
        }
        
    }
    
    var facebook = function(){
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }
    
    
    $("#facebookComment").attr("href", window.location);
    
    facebook();
    
    var size = $(".contenido-ver .content .field-name-field-noticias-imagen-principal img, .contenido-ver .content .field-name-field-image img").height();
    if($('div.user-picture').length){
        $(".contenido-ver .user-picture").css("margin-top", size+5);
    }else{
        $(".contenido-ver .submitted").css("margin-top", size+5);
    }
    
    
    $( window ).resize(function() {
        var size = $(".contenido-ver .content .field-name-field-noticias-imagen-principal img, .contenido-ver .content .field-name-field-image img").height();
        if($('div.user-picture').length){
            $(".contenido-ver .user-picture").css("margin-top", size+5);
        }else{
            $(".contenido-ver .submitted").css("margin-top", size+5);
        }
    });
    
});


