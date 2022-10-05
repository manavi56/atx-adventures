extends RigidBody2D

const UP_IMPULSE: float = -175.0

func _input(event: InputEvent) -> void:
	if event is InputEventKey:
		if event.is_action_pressed("ui_select"):
			$Bubbles.play()
			_submarine_jump()
			
func _submarine_jump() -> void:
	set_linear_velocity(Vector2(0, 0))
	apply_central_impulse(Vector2(0, UP_IMPULSE))
