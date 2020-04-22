function goto_ranking() {
window.location.replace("ranking/rgtrank.php")
}

function goto_home() {
window.location.replace("/")
}

function strava_link(client_id, address, port) {
window.location.replace("https://www.strava.com/oauth/authorize?client_id="+client_id+"&response_type=code&redirect_uri=http://"+address+"&scope=read,profile:read_all,activity:read&approval_prompt=force")
}

