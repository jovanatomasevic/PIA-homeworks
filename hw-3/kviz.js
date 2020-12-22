(function() 
 {
  var svaPitanja = [{
    pitanje: "Које године се одиграла Косовска битка?",
    ponudjeniOdgovori: ["а)1489","б)1389", "в)1589"],
    tacanOdgovor: 1
  }, {
    pitanje: "Колико је 2*2-2?",
    ponudjeniOdgovori: ["а)2","б)0"],
    tacanOdgovor: 0
  }, {
    pitanje: "Колико је дуга река Година(Врело) која се налази у Перућцу(Бајина Башта)?",
    ponudjeniOdgovori: ["a)400м;","б)1км;","в)365м"],
    tacanOdgovor: 2
  },{
    pitanje: "Означити реченицу у којој је употребљен плусквамперфекат. ",
    ponudjeniOdgovori:  ["a)Воз беше кренуо када смо ми стигли на станицу.",
    "б)Не одгледасмо филм до краја.",
    "в)Док су одлазили, на лицима им се одражаваху мисли."],
    tacanOdgovor: 0
  }, {
    pitanje: "Означити тачно написану релацију Омовог закона.",
    ponudjeniOdgovori: ["a)U=R/I","б)U=R*I","в)U=I/R"],
    tacanOdgovor: 1
  }, {
    pitanje: "Пронађи уљеза.",
    ponudjeniOdgovori: ["а)Java","б)jQuery", "в)JavaScript"],
    tacanOdgovor: 0
  }, {
    pitanje: "Мерна јединица за снагу је:",
    ponudjeniOdgovori: ["а)V","б)A", "в)W"],
    tacanOdgovor: 2
  }, {
    pitanje: "Ако је дато ,,и\"(and) коло, а на улаз доводимо вредности 0 и 1, која вредност ће бити на излазу?",
    ponudjeniOdgovori: ["a)1","б)0"],
    tacanOdgovor: 1
  },{
    pitanje: "Ко је написао дело ,,Сумњиво лице\"?",
    ponudjeniOdgovori:  ["a)Стеван Сремац","б)Коста Трифковић", "в)Бранислав Нушић"],
    tacanOdgovor: 2
  }, {
    pitanje:"Који програмски језик рачунар може директно да извршава?",
    ponudjeniOdgovori: ["а)машински језик","б)C","в)BASIC"],
    tacanOdgovor: 0
  }];
  
  var brojacPitanja = 0;
  var izabranOdg = [];
  var prostorKviza = $('#kviz');
    
  narednoPitanje();
  $('#naredno').click(function () 
    {
          chooseOption();
          brojacPitanja++;
          narednoPitanje();
          myTimer();
        
    });  
   
   $('#kraj').click(function krajIgre()
   {
        var scoreRslt = displayResult();
        prostorKviza.append(scoreRslt).fadeIn();
        $('#pitanje').remove();
        $('#naredno').hide();
        $('#kraj').hide();
        myStopFunction();
        $(document).ready(function() {
       $('#container').append('<button class="btn-styled" type="button"><a href="kviz.html"><span>Покрени поново</span></a></button>');
});
      });
  
   
  function createElement(index) 
    {
        var element = $('<div>',{id: 'pitanje'});
        var header = $('<h2>Питање ' + (index + 1) + ' :</h2>');
        element.append(header);

        var pitanje = $('<p>').append(svaPitanja[index].pitanje);
        element.append(pitanje);

        var radio = radioButtons(index);
        element.append(radio);
        return element;
    }
  
  function radioButtons(index) 
    {
        var radioItems = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < svaPitanja[index].ponudjeniOdgovori.length; i++) {
          item = $('<li>');
          input = '<input type="radio" name="tacanOdgovor" value=' + i + ' />';
          input += svaPitanja[index].ponudjeniOdgovori[i];
          item.append(input);
          radioItems.append(item);
        }
        return radioItems;
  }
  
  function chooseOption() 
    {
        izabranOdg[brojacPitanja] = +$('input[name="tacanOdgovor"]:checked').val();
    }
   
  function narednoPitanje() 
    {
      prostorKviza.fadeOut(function() 
            {
              $('#pitanje').remove();
              setInterval(myVar);
              if(brojacPitanja < svaPitanja.length)
                {
                    var narednoPitanje = createElement(brojacPitanja);
                    prostorKviza.append(narednoPitanje).fadeIn();
                    if (!(isNaN(izabranOdg[brojacPitanja]))) 
                    {
                      $('input[value='+izabranOdg[brojacPitanja]+']').prop('checked', true);
                    }
                    if(brojacPitanja === 0)
                    {
                        $('#naredno').show();
                    } 
                }
              else 
                {
                    var scoreRslt = displayResult();
                    prostorKviza.append(scoreRslt).fadeIn();
                    $('#naredno').hide();
                  
                }
        });
    }
  function displayResult() 
    {
        var score = $('<p>',{id: 'pitanje'});
        var correct = 0;
        for (var i = 0; i < izabranOdg.length; i++) 
        {
          if (izabranOdg[i] === svaPitanja[i].tacanOdgovor) 
          {
            correct++;
          }
        }
        score.append('Укупно ' + correct + ' од ' +svaPitanja.length);
        return score;
  }
}) ();

var myVar = setInterval(function(){ myTimer() }, 1000);
var vreme = 20;
function myTimer() {
if(vreme == 0)
{
    myStopFunction();
}
document.getElementById("prikazTajmera").innerHTML = '00:' + zeroPad(vreme,2);
vreme = vreme  - 1;

}

function myStopFunction() {
  document.getElementById("prikazTajmera").innerHTML = '00:' + zeroPad(0,2);
  clearInterval(myVar);
}
function zeroPad(num, places) {
  var zero = places - num.toString().length + 1;
  return Array(+(zero > 0 && zero)).join("0") + num;
}

