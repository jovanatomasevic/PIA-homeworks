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
    pitanje: "Ако је дато \,,и\"(and) коло, а на улаз доводимо вредности 0 и 1, која вредност ће бити на излазу?",
    ponudjeniOdgovori: ["a)1","б)0"],
    tacanOdgovor: 1
  },{
    pitanje: "Ко је написао дело ,,\Сумњиво лице\"?",
    ponudjeniOdgovori:  ["a)Стеван Сремац","б)Коста Трифковић", "в)Бранислав Нушић"],
    tacanOdgovor: 2
  }, {
    pitanje:"Који програмски језик рачунар може директно да извршава?",
    ponudjeniOdgovori: ["а)машински језик","б)C","в)BASIC"],
    tacanOdgovor: 0
  }];
  
  var brojacPitanja = 0;
  var izabranOdg = [];
  var quizSpace = $('#quiz');
    
  narednoPitanje();
    
  $('#naredno').click(function () 
    {
          chooseOption();
          brojacPitanja++;
          narednoPitanje();
        
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
        quizSpace.fadeOut(function() 
            {
              $('#pitanje').remove();
              if(brojacPitanja < svaPitanja.length)
                {
                    var narednoPitanje = createElement(brojacPitanja);
                    quizSpace.append(narednoPitanje).fadeIn();
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
                    quizSpace.append(scoreRslt).fadeIn();
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
})();