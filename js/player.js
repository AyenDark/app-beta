class Player {
    constructor(name) {
        this.name = name;
        this.score = 0;
    }

    increaseScore(amount) {
        this.score += amount;
    }

    getScore() {
        return this.score;
    }
}

module.exports = Player;