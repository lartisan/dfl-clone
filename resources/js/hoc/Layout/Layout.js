import React, { Component } from 'react'

import HeaderContainer from '../../components/Layout/Header/HeaderContainer'
import Footer from '../../components/Layout/Footer/Footer';

class Layout extends Component {
	render () {
		return (
			<div className="font-sans bg-white flex flex-col min-h-screen w-full">

				<div className="flex-grow container mx-auto sm:px-4 pb-8">
					<HeaderContainer />
					{this.props.children}
				</div>

				<Footer />
			</div>
		)
	}
}

export default Layout
