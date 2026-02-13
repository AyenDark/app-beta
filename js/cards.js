'use strict';

class Card {
    constructor(name, power) {
        this.name = name;
        this.power = power;
    }
}

// Example of available cards
const availableCards = [
    new Card('Card A', 10),
    new Card('Card B', 20),
    new Card('Card C', 30)
];

module.exports = { Card, availableCards };