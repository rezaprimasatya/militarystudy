var selId = ['#optGuest:15','#optRoom:8','#optDestination:Africa:Australia:Banglades:Brunei:China:Denmark:England:France:Guatemala:Indonesia:Japan']

function generateOpt(selid){
    var sel = document.querySelector(selid[0]);
    var len = isNaN(selid[1]) ? selid.length : selid[1];
    for (var i=1; i<len;i++){
        var opt = document.createElement('option');
        var val = isNaN(selid[1]) ? selid[i] : i;
        opt.value=val;
        opt.text=val;
        if (i===1){
            opt.selected=true;
        }
        sel.appendChild(opt);
    }
    if (isNaN(selid[1])===false){
        var opt = document.createElement('option');
        opt.value='x';
        opt.text= selid[1]+'++';
        sel.appendChild(opt);
    }
}


for (var i=0; i< selId.length; i++){
    generateOpt(selId[i].split(':'));
}

function dateFormat(date1, numb=0){
    var date2 = new Date(date1);
    date2.setDate(date2.getDate()+numb); 
    var year = date2.getFullYear();
    var month = date2.getMonth()<9 ? '0'+(date2.getMonth()+1) : (date2.getMonth()+1);
    var date = date2.getDate()<10 ? '0'+date2.getDate() : date2.getDate();
    return year+'-'+month+'-'+date;
}

function setDate(){
    var arrDate = document.querySelector('#arrDate');
    var departDate = document.querySelector('#departDate');
    var dateNow = new Date();
    arrDate.value = dateFormat(dateNow);
    departDate.value = dateFormat(dateNow,1);
    arrDate.setAttribute('min',arrDate.value);
    departDate.setAttribute('min',departDate.value);
}

setDate();

function countNight(){
    var arrDate = document.querySelector('#arrDate');
    var departDate = document.querySelector('#departDate');
    var night = document.querySelector('#night span');
    var count = 0;
    var sDate = dateFormat(arrDate.value);
    var eDate = dateFormat(departDate.value);
    if (sDate>=eDate){
        eDate = dateFormat(sDate,1);
        departDate.value = eDate;
    }
    while(sDate<eDate){
        count++;
        sDate = dateFormat(sDate,1);
    }
    night.textContent = count;
    var cDate = dateFormat(new Date());
    arrDate.setAttribute('min',cDate);
    departDate.setAttribute('min',dateFormat(arrDate.value,1));
}

countNight()

var arrDate = document.querySelector('#arrDate');
var departDate = document.querySelector('#departDate');
arrDate.addEventListener('change',countNight);
departDate.addEventListener('change',countNight);

function process(){
    var dest = document.querySelector('#optDestination');
    var guest = document.querySelector('#optGuest');
    var room = document.querySelector('#optRoom');
    var arrDate = document.querySelector('#arrDate');
    var departDate = document.querySelector('#departDate');
    var night = document.querySelector('#night span');
    var result = ['destination: '+dest.value,'numbers of guest: '+guest.value,'numbers of room: '+room.value,
        'arrival date: '+arrDate.value,'departure date: '+departDate.value,'night stay: '+night.textContent];
    var resultText='';
    for (var i=0; i<result.length; i++){
        resultText += result[i];
        if (i<result.length-1){
            resultText+='\n';
        }
    }
    alert('Search result:\n'+resultText);
}

var search = document.querySelector('#search');
search.addEventListener('click',process);