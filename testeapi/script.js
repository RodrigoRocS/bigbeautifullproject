// function carregarImagens(){
//     let url = "https://dog.ceo/api/breeds/image/random";
//     fetch(url, {method: 'get'})
//     .then(function(response) {
//         response.json().then(function(data) {
//             console.log('Resultado da requisição: ' + data.message);

//             let imgDog = document.getElementById("img_dog");
//             imgDog.src = data.message;

//         });
//     })
//     .catch(function(err) {
//         console.error('O seguinte erro ocorreu durante a requisição: ' + err);
//     });
// }

async function carregarImagens() {
  let url = "https://dog.ceo/api/breeds/image/random";
  const dogs = await fetch(url);
  const getDogs = await dogs.json();
  console.log(getDogs);

  let imgDog = document.getElementById("img_dog");
  imgDog.src = getDogs.message;
}

let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
  carregarImagens();
});
