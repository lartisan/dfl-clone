import React, { Component } from 'react'

// import classes from './GenderSelector.css'

class GenderSelector extends Component {
	state = {
		selectedSex: 'men'
	}

	toggleSex = (sex) => {
		this.setState({selectedSex: sex})
	}

	render() {
		return (
			<div className="w-1/3 md:w-auto text-center text-black">
				<div className="md:flex">
					<div
						onClick={() => this.toggleSex('women')}
						className={(this.state.selectedSex === 'women' ? 'activeSex ' : '') + "cursor-pointer text-base font-semibold flex -mb-px mr-4"}>WOMEN</div>
					<div
						onClick={() => this.toggleSex('men')}
						className={(this.state.selectedSex === 'men' ? 'activeSex ' : '') + "cursor-pointer text-base font-semibold flex -mb-px"}>MEN</div>
				</div>
			</div>
		)
	}
}

export default GenderSelector