function rndm_lorempixel(){
    var lorempixel=new Array()
    
    lorempixel[1]="abstract"
    lorempixel[2]="animals"
    lorempixel[3]="business"
    lorempixel[4]="cats"
    lorempixel[5]="city"
    lorempixel[6]="food"
    lorempixel[7]="nightlife"
    lorempixel[8]="fashion"
    lorempixel[9]="people"
    lorempixel[10]="nature"
    lorempixel[11]="sports"
    lorempixel[12]="technics"
    lorempixel[13]="transport"

    var ry=Math.floor(Math.random()*lorempixel.length)
    if (ry==0)
    ry=1
    
    tempHtml = ('<img src="http://lorempixel.com/400/200/'+lorempixel[ry]+'" border=0>')

    $('#lorempixel').html(tempHtml);
}