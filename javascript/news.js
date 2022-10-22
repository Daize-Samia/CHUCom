const news = document.getElementById("news");

let url = 'https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=206895d3a8f14f24b114ffe7340f3c23'

fetch(url)
.then(response => response.json())
.then(response=>{
console.log(response);
for(var i=0;i<40;i++){
    news.innerHTML+= +"<section class=\"page-section\">"
            +"<div class=\"container\">"
                +"<div class=\"product-item\">"
                    +"<div class=\"product-item-title d-flex\">"
                        +"<div class=\"bg-faded p-5 d-flex ms-auto rounded\">"
                            +"<h2 class=\"section-heading mb-0\">"
                                +"<span class=\"section-heading-upper\">"+ response.articles[i].title +"</span>"
                                +"<span class=\"section-heading-lower\">"+ response.articles[i].source.name +"</span>"
                           +"</h2>"
                       + "</div>"
                    +"</div>"
                    +"<img class=\"product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0\" src=\" " + response.articles[i].urlToImage + "\" alt=\"...\" />"
                    +"<div class=\"product-item-description d-flex me-auto\">"
                        +"<div class=\"bg-faded p-5 rounded\"><a style=\"text-decoration: none; color : white;\" href=\"  "+ response.articles[i].url + "\" ><p class=\"mb-0\">"+ response.articles[i].description +"</p></a></div>"
                    +"</div>"
                +"</div>"
            +"</div>"
        +"</section>";
}
})
.catch(err => console.error(err));

