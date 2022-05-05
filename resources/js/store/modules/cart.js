import {
	ADD_ITEM,
	REMOVE_ITEM
} from "../actions/cart";

const state = {
	StoreCart: [],
};

const getters = {
	StoreCart: (state) => state.StoreCart,
};

const actions = {
	[ADD_ITEM]: ({ commit }, item) => {
		commit(ADD_ITEM, item);
	},

	[REMOVE_ITEM]: ({ commit }, index) => {
		commit(REMOVE_ITEM, index);
	},
};

const mutations = {
	[ADD_ITEM]: (state, item) => {
		state.StoreCart.push(item);
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
