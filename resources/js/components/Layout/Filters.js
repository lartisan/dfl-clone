import React, { Component } from 'react'

// import classes from './Filters.css'

class Filters extends Component {
	render() {
		return (
			<div className="flex relative">
				<div className="w-1/4 px-2">
					<div className="text-sm text-black bg-grey-lighter h-auto p-3">Brand</div>
				</div>
				<div className="w-1/4 px-2">
					<div className="text-sm text-black bg-grey-lighter h-auto p-3">Colour</div>
				</div>
				<div className="w-1/4 px-2">
					<div className="text-sm text-black bg-grey-lighter h-auto p-3">Size</div>
				</div>
				<div className="w-1/4 pl-2 ml-32">
					<div className="text-sm text-black bg-grey-lighter h-auto p-3">Page</div>
				</div>
			</div>
		)
	}
}

export default Filters