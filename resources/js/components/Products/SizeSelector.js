import React, { Component } from 'react'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faAngleDown } from '@fortawesome/free-solid-svg-icons'

class SizeSelector extends Component {
	updateSize = (e) => this.props.selectOnChange(e.target.value)

	render() {
		return (
			<div className="inline-block relative w-32 mr-4"> 
				<select 
					onChange={this.updateSize}
					className="block appearance-none w-full bg-grey-light border border-grey-light hover:border-grey px-4 py-2 pr-8 leading-tight focus:outline-none">
					<option value="">size</option>
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
				</select>

				<div className="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
					<FontAwesomeIcon icon={faAngleDown} className="" />
				</div>
			</div>
		)
	}
}

export default SizeSelector