$( function() {
  $( "#datepicker" ).datepicker();
} );

function fun_summn_r() {
  var rng=document.getElementById('range_summn');
  var summ=document.getElementById('summn');
  summ.value=rng.value;
  var value = (rng.value-rng.min)/(rng.max-rng.min)*100;
  rng.style.background = 'linear-gradient(to right, #89AE35 ' + value + '%, #000 ' + value + '%)';
}
function fun_summn_p() {
  var rng=document.getElementById('range_summn');
  var summ=document.getElementById('summn');
  rng.value=summ.value;
  var value = (rng.value-rng.min)/(rng.max-rng.min)*100;
  rng.style.background = 'linear-gradient(to right, #89AE35 ' + value + '%, #000 ' + value + '%)';
}
function fun_summadd_r() {
  var rng=document.getElementById('range_summadd');
  var summ=document.getElementById('summadd');
  summ.value=rng.value;
  var value = (rng.value-rng.min)/(rng.max-rng.min)*100;
  rng.style.background = 'linear-gradient(to right, #89AE35 ' + value + '%, #000 ' + value + '%)';
}
function fun_summadd_p() {
  var rng=document.getElementById('range_summadd');
  var summ=document.getElementById('summadd');
  rng.value=summ.value;
  var value = (rng.value-rng.min)/(rng.max-rng.min)*100;
  rng.style.background = 'linear-gradient(to right, #89AE35 ' + value + '%, #000 ' + value + '%)';
}

$('.myform').submit(function(e){
  e.preventDefault();
  let th =$(this);
  let mess =$('.mess');

  $.ajax({
    url: 'phpCalc/calc.php',
    type: 'POST',
    data: th.serialize(),
    success: function(data){
      mess.html("<b>Результат: </b>" + data);
    },error: function(){
      alert('Ошибка');
    }
  })
})
