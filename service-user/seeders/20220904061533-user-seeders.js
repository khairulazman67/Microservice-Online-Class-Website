'use strict';
const bcrypt = require('bcrypt');

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.bulkInsert('users', [
      {
        name: "Khairul",
        profession: "Admin Micro",
        role: "admin",
        email: "khairul@gmail.com",
        password: await bcrypt.hash('rahasia1234', 10),
        created_at: new Date(),
        updated_at: new Date()
      },
      {
        name: "Azman",
        profession: "Front End Developer",
        role: "student",
        email: "azman@mail.com",
        password: await bcrypt.hash('rahasiaku123', 10),
        created_at: new Date(),
        updated_at: new Date()
      }
    ]);
  },

  down: async (queryInterface, Sequelize) => {   
    await queryInterface.bulkDelete('users', null, {});
  }
};
