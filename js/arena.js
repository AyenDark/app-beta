class Troop {
    constructor(name, strength) {
        this.name = name;
        this.strength = strength;
    }

    attack() {
        return `${this.name} attacks with strength ${this.strength}!`;
    }
}

class Arena {
    constructor() {
        this.troops = [];
    }

    addTroop(troop) {
        this.troops.push(troop);
    }

    battle() {
        return this.troops.map(troop => troop.attack()).join('\n');
    }
}

module.exports = { Troop, Arena };