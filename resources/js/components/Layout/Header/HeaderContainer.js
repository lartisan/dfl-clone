import React from 'react'

import Categories from './Categories/Categories'
import PromoBar from './PromoBar/PromoBar'
import NavigationContainer from './Navigation/NavigationContainer';

const HeaderContainer = () => (
	<div className="mb-3">
		<NavigationContainer />
		
		<Categories />

		<PromoBar />
	</div>
)

export default HeaderContainer