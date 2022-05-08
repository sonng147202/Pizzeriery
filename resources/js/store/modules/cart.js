import {
	ADD_ITEM,
	UPDATE_ITEM,
	REMOVE_ITEM,
	CLEAR_ALL
} from "../actions/cart";

const state = {
	StoreCart: [],
};

const getters = {
	StoreCart: state => state.StoreCart,
};

const actions = {
	[ADD_ITEM]: ({ commit }, item) => {
		commit(ADD_ITEM, item);
	},
	[UPDATE_ITEM]: ({ commit } , index, quantity) => {
		// commit(UPDATE_ITEM, index, quantity);
		console.log(index, quantity);
	},
	[REMOVE_ITEM]: ({ commit }, index) => {
		commit(REMOVE_ITEM, index);
	},
};

const mutations = {
	[ADD_ITEM]: (state, item) => {
		state.StoreCart.push(item);
	},
	[UPDATE_ITEM]: (state, index, quantity) => {
		state.StoreCart[index].quantity = quantity;
	},
	[REMOVE_ITEM]: (state, index) => {
		state.StoreCart.splice(index, 1);
	},
};

export default {
	state,
	getters,
	actions,
	mutations,
};
