import React, { Component } from "react";

class PostComment extends Component {
    constructor(props) {
        super(props);
        this.state = {
        }

    }
    componentDidMount() {
        const requestOptions = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json'},
            body: JSON.stringify({ 
                to: this.state.to,
                subject: objet,
                text: text})
        };
        fetch('***', requestOptions)
        .then (console.log('body: ',requestOptions))
            .then(response => response.json())
            .then(data => console.log(data))
    }
    render() {
        <div>PostComment</div>
    }


}
export default PostComment