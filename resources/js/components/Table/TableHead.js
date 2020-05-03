import React, { Component } from 'react'

// import classes from './TableHead.css'

class TableHead extends Component {
	render() {
		let { thItems } = this.props
		return (
			<thead className="border-grey-lighter">
				<tr>
					{
						thItems.map((thItem, key) => {
							if (key === 0 || key === 1)
								return <th key={key} className="text-left" scope="col">{thItem}</th>
							else if (thItems.length === key + 1)
								return <th key={key} className="text-right" scope="col">{thItem}</th>
							else
								return <th key={key} className="text-center" scope="col">{thItem}</th>
						})
					}
				</tr>
			</thead>
		)
	}
}

export default TableHead