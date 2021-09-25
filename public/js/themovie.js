function moviesDb(data){
    return `
    <div class="movie-item-style-2 movie-item-style-1">
        <img src="https://image.tmdb.org/t/p/w200/${data.poster_path}" alt="">
        <div class="hvr-inner">
            <a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
        </div>
        <div class="mv-item-infor">
            <h6><a href="#">${data.title}</a></h6>
            <p class="rate"><i class="ion-android-star"></i><span>${data.vote_average}</span> /10</p>
        </div>
    </div>
    `;
}

$(document).ready(function(){
$.getJSON('http://127.0.0.1:8000/api/',function(data){
    let content = data.data;
    $('.topbar-filter p span').text(data.data.length)

      content.map((eleme,index)=>{
        $('.flex-wrap-movielist').append(moviesDb(eleme));

      });


});

})