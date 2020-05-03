import React, { Component } from 'react'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faUser, faGlobeAmericas } from '@fortawesome/free-solid-svg-icons'
import { faHeart } from '@fortawesome/free-regular-svg-icons'
import CartIcon from './CartIcon';
import SubTotal from './SubTotal';

class UserNavigation extends Component {
	render() {
		return (
			<div className="w-1/3 md:w-auto md:flex">
				<div className="flex flex-col">
					<div className="text-right text-xs py-1">
						Sign In
					</div>
					<div className="flex flex-row py-1">
						<FontAwesomeIcon icon={faUser} className="mr-4 text-xl" />
						<FontAwesomeIcon icon={faHeart} className="mr-4 text-xl text-red" />
						<FontAwesomeIcon icon={faGlobeAmericas} className="mr-4 text-xl text-blue" />
						<SubTotal />
						<CartIcon />
					</div>
				</div>
			</div>
		)
	}
}

export default UserNavigation