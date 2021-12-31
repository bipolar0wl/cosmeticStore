const { DataTypes } = require('sequelize');

module.exports = (sequelize) => {
	sequelize.define('book', {
		// id: {
		// 	allowNull: false,
		// 	autoIncrement: true,
		// 	primaryKey: true,
		// 	type: DataTypes.INTEGER
		// },
		name: {
			allowNull: false,
			type: DataTypes.STRING,
		},
    year: {
			type: DataTypes.INTEGER,
		},
    publisher: {
			type: DataTypes.STRING,
		},
    source: {
			type: DataTypes.STRING,
		},
    ref: {
			type: DataTypes.STRING,
		},
    DOI: {
			type: DataTypes.STRING,
		},
	});
};