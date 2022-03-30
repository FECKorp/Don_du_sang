function showClasseForm() {
    const selectTypeUser = document.querySelector("#selectTypeUserForCreate")
    const groupAddClasse = document.querySelector("#groupAddClasse")

    if (selectTypeUser.value == 2) {
        groupAddClasse.removeAttribute("hidden")
    }
    else {
        groupAddClasse.setAttribute("hidden", "hidden")
    }
}

function ShowPasswordGenerate() {
    const groupPasswordInput = document.querySelector("#passwordForm")
    const messagePasswordGenerate = document.querySelector("#passwordGenerateMessage")
    const boolGenerate = document.querySelector("#generateBoolPassword")

    boolGenerate.value == 0 ? boolGenerate.value = 1 : boolGenerate.value = 0

    if (boolGenerate.value == 0) { //Si Génération de mot de passe désactiver
        groupPasswordInput.removeAttribute("hidden")
        messagePasswordGenerate.setAttribute("hidden", "hidden")
    }
    else {
        groupPasswordInput.setAttribute("hidden", "hidden")
        messagePasswordGenerate.removeAttribute("hidden")
    }
}
