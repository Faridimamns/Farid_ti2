// Tangkap elemen a
document.querySelectorAll('#option a').forEach((anchor) => {
    anchor.onclick = (element) => {
        computerChoice(element)
    }
})

// Fungsi untuk bot komputer
function computerChoice(element) {

    // menangkap element pilihan komputer
    let pilihanKomputer = document.querySelector('#result')

    // menangkap element pilihan user
    let pilihanUser = element.target.innerText

    // Array pilihan untuk bot komputer
    let choices = ['Rock', 'Paper', 'Scissors']

    pilihanKomputer.innerHTML = choices[Math.round(Math.random() * choices.length)]

    // console.log(pilihanKomputer)
    pilihanKomputer = pilihanKomputer.innerHTML

    // CONDITION DRAW

    if (pilihanKomputer == pilihanUser) {
        alert("DRAW")
    }

    // CONDITION WIN 
    if (pilihanUser == "Rock" && pilihanKomputer == "Scissors") {
        alert("YOU WIN!!")
    }
    else if (pilihanUser == "Scissors" && pilihanKomputer == "Paper") {
        alert("YOU WIN!!")
    }
    else if (pilihanUser == "Paper" && pilihanKomputer == "Rock") {
        alert("YOU WIN!!")
    }

    // CONDITION LOSE
    if (pilihanUser == "Paper" && pilihanKomputer == "Scissors") {
        alert("YOU LOSE!!")
    }
    else if (pilihanUser == "Rock" && pilihanKomputer == "Paper") {
        alert("YOU LOSE!!")
    }
    else if (pilihanUser == "Scissors" && pilihanKomputer == "Rock") {
        alert("YOU LOSE!!")
    }
}

