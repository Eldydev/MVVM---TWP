import React, { Component } from "react";

class RenderList extends Component {
    constructor(props) {
        super(props);
        this.state = {
        }

    }
    componentDidMount() {
        fetch('***')
        .then(res => res.json())

        .catch(error => console.error('Error: ', error))

        .then(response => {
            console.log('Success: ', response)
            console.log(response.rows)
            this.setState({ 

             })
        });
    }
    render() {
        <div>RenderList</div>
    }


}
export default RenderList